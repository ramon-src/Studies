package Condiment;

import Beverage.Beverage;

public class Soy extends CondimentDecorator {

    private Beverage bevarage;

    public Soy(Beverage bevarage) {
        this.bevarage = bevarage;
    }
    
    public String getDescription() {
        return bevarage.getDescription() + " Soy";
    }

    public double cost() {
        return 0.15 + bevarage.cost();
    }
}