package be.pxl.VoorbeeldOpgaveExamen_Boyen;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.Serializable;
import java.util.HashMap;
import java.util.Random;
import java.util.Scanner;
import java.util.function.Consumer;

public class Simulatie {

	private Broodjeszaak takeABreak;
	private klantMakerThread th;
	private transient Scanner scan;
	private transient Thread t;
	private transient Thread savethread;
	private transient Thread stopThread;
	int kansOpKaas = 0;
	int klantenNogAanmaken = 0;

	public Simulatie() {

		scan = new Scanner(System.in);

		try {
			FileInputStream file = new FileInputStream("TakeABreak.ser");
			ObjectInputStream obj = new ObjectInputStream(file);
			takeABreak = (Broodjeszaak) obj.readObject();
			for (Klant k : takeABreak.getKlantenDieNogGeholpenMoetenWorden()) {
				k.setConsumer(p -> Simulatie.toonBlij(p));
			}
			takeABreak.laura.start();
			takeABreak.lisa.start();

		} catch (IOException | ClassNotFoundException e) {
			HashMap<String, Integer> voorraad;
			voorraad = new HashMap<>();
			voorraad.put("Kaas", 0);
			voorraad.put("Ham", 0);
			// voorraad.put("Choco", 0);
			takeABreak = new Broodjeszaak(voorraad);

			for (String type : voorraad.keySet()) {
				System.out.print(type + " : ");
				voorraad.replace(type, scan.nextInt());
			}

			System.out.print("Hoeveel klanten : ");
			klantenNogAanmaken = scan.nextInt();

			if (voorraad.keySet().size() == 2) {
				System.out.print("Hoeveel % kans op kaas: ");
				kansOpKaas = scan.nextInt();
			} else {
				for (String type : voorraad.keySet()) {
					// Uitbreiding
				}
			}
		}

		th = new klantMakerThread();
		t = new Thread(th);
		savethread = new Thread(new saveThread());

		stopThread = new Thread(new checkFinishedThread());
		t.start();
	}

	public static void main(String[] args) {
		Simulatie sim = new Simulatie();
	}

	public static void toonBlij(boolean status) {
		if (status) {
			System.out.println("Klant status: \u263A");
		} else {
			System.out.println("Klant status: \u2639");
		}
	}

	// Nieuwe inner class aanmaken om meerdere run()-methodes te kunnen gebruiken
	private class klantMakerThread implements Runnable, Serializable {

		@Override
		public void run() {
			Random r1 = new Random();
			while (klantenNogAanmaken > 0) {
				int getal = r1.nextInt(100) + 1;
				String s = null;
				if (getal <= kansOpKaas) {
					s = "Kaas";
				} else {
					s = "Ham";
				}

				// We gebruiken hier Lambda zodat de Consumer het kan aannemen
				takeABreak.verwelkom(new Klant(p -> Simulatie.toonBlij(p), s));
				klantenNogAanmaken--;
			}
			savethread.start();
			stopThread.start();
			System.out.println("klantAanmaakThread Stopped");
		}
	}

	private class checkFinishedThread implements Runnable {
		@Override
		public void run() {
			// TODO Auto-generated method stub
			while (takeABreak.heeftNogKlanten()) {
				try {
					Thread.sleep(1000);
				} catch (InterruptedException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
			}
			takeABreak.laura.stopThread();
			takeABreak.lisa.stopThread();
			System.out.println("checkFinishedThread Stopped");
		}
	}

	private class saveThread implements Runnable {
		@Override
		public void run() {
			while (takeABreak.heeftNogKlanten()) {
				try {
					System.out.println("Ik probeer weg te schrijven");
					FileOutputStream fos = new FileOutputStream(
							"takeABreak.ser");
					ObjectOutputStream oos = new ObjectOutputStream(fos);
					oos.writeObject(takeABreak);
					fos.close();
					oos.close();
					System.out.println("test");
				} catch (IOException e1) {
					e1.printStackTrace();
				}
				try {
					Thread.sleep(10000);
				} catch (InterruptedException e) {
					e.printStackTrace();
				}
			}
			System.out.println("saveThread Stopped");
		}
	}
}