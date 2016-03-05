package be.pxl.VoorbeeldOpgaveExamen_Boyen;

import java.io.Serializable;
import java.util.function.Consumer;

public class Klant implements Serializable{
	private String gewildbeleg;
	private Broodje gekregenbroodje=null;
	private transient Consumer<Boolean> consumer;
	
	public Consumer<Boolean> getConsumer() {
		return consumer;
	}

	public void setConsumer(Consumer<Boolean> consumer) {
		this.consumer = consumer;
	}

	//Consumer kan een methode aannemen en gebruiken als variabele
	public Klant(Consumer<Boolean> consumer, String s) {
		this.consumer=consumer;
		gewildbeleg=s;
	}

	public String vraagBestelling() {
		return gewildbeleg;
	}

	public void geef(Broodje b) {
		gekregenbroodje=b;
	}

	public String getGevraagdBroodje(){
		return gewildbeleg;
	}
	
	public void gaWeg() {
		consumer.accept(gekregenbroodje!=null); //Accept zorgt voor het uitvoeren	
	}
}