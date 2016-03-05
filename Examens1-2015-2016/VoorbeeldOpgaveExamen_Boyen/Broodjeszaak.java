package be.pxl.VoorbeeldOpgaveExamen_Boyen;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.stream.Stream;

public class Broodjeszaak implements Serializable{
	private ArrayList<Klant> klantenDieNogGeholpenMoetenWorden;
	public Verkoper lisa;
	public Verkoper laura;
	private HashMap<String, Integer> voorraad;
	private ArrayList<Klant> klantenDieWeggestuurdMoetenWorden = new ArrayList<>();
	
	public ArrayList<Klant> getKlantenDieNogGeholpenMoetenWorden() {
		return klantenDieNogGeholpenMoetenWorden;
	}

	public void setKlantenDieNogGeholpenMoetenWorden(
			ArrayList<Klant> klantenDieNogGeholpenMoetenWorden) {
		this.klantenDieNogGeholpenMoetenWorden = klantenDieNogGeholpenMoetenWorden;
	}

	public Broodjeszaak(HashMap<String, Integer> voorraad) {
		klantenDieNogGeholpenMoetenWorden = new ArrayList<>();
		lisa = new Verkoper(this);
		laura = new Verkoper(this);
		this.voorraad = voorraad;

		for (String type : voorraad.keySet()) {
			System.out.println(type + " : " + voorraad.get(type));
		}
	}

	public void verwelkom(Klant k) {
		klantenDieNogGeholpenMoetenWorden.add(k);
		System.out.println(k); // test
	}

	public synchronized Klant volgende() {
		try {
			Klant k = klantenDieNogGeholpenMoetenWorden.get(0);
			klantenDieNogGeholpenMoetenWorden.remove(k);
			return k;
		} catch (IndexOutOfBoundsException ex) {
			return null;
		}
	}
	
	public synchronized boolean neemBeleg(String s){
		int aantalGevraagdBeleg = voorraad.get(s);
		System.out.println(s + " : " + voorraad.get(s));
		if (aantalGevraagdBeleg > 0){
			voorraad.replace(s, voorraad.get(s)-1);
			return true;
		}else{
			klantenDieNogGeholpenMoetenWorden.stream().filter(x -> x.getGevraagdBroodje().equals(s)).forEach(g -> stuurWeg(g));;
			StuurAllemaalWeg();
			return false;
		}
	}
	private void StuurAllemaalWeg() {
		for(Klant k : klantenDieWeggestuurdMoetenWorden){
			klantenDieNogGeholpenMoetenWorden.remove(k);
		}
		klantenDieWeggestuurdMoetenWorden.clear();
	}
	
	public void stuurWeg(Klant k){
		k.gaWeg();
		klantenDieWeggestuurdMoetenWorden.add(k);
	}
	
	public boolean heeftNogKlanten() {
		return klantenDieNogGeholpenMoetenWorden.size() >0;
	}
}