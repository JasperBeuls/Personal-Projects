package be.pxl.VoorbeeldOpgaveExamen_Boyen;

import java.io.Serializable;

public class Verkoper implements Serializable {
	private Broodjeszaak broodjeszaak;

	private transient Thread t;
	private VerkoperThread x;

	public Verkoper(Broodjeszaak broodjeszaak) {
		x = new VerkoperThread();
		t = new Thread(x);
		t.start();
		this.broodjeszaak = broodjeszaak;
	}

	public void start() {
		t = new Thread(x);
		t.start();
	}

	public void stopThread() {
		System.out.println("Stopping thread (part 1)");
		x.stopThread();
	}

	private class VerkoperThread implements Runnable, Serializable {
		private boolean isRunning = true;
		
		public void stopThread() {
			System.out.println("Stopping thread (part 2)");
			isRunning = false;
		}

		@Override
		public void run() {
			while (isRunning) {
				Klant huidige = broodjeszaak.volgende();
				if (huidige == null) {
					huidige = broodjeszaak.volgende();
					// System.out.println("Geen klant");
					try {
						Thread.sleep(1000);
					} catch (InterruptedException e) {
						e.printStackTrace();
					}
				} else {
					String s = huidige.vraagBestelling();
					if (broodjeszaak.neemBeleg(s)) {
						Broodje b = new Broodje(s);
						huidige.geef(b);
						huidige.gaWeg();
					}
					try {
						Thread.sleep(1000);
					} catch (InterruptedException e) {
						e.printStackTrace();
					}
				}
			}
		}
	}
}