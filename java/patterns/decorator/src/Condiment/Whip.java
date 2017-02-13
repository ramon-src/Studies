package Condiment;

import Beverage.Beverage;

public class Whip extends CondimentDecorator {

    private Beverage bevarage;

    public Whip(Beverage bevarage) {
        this.bevarage = bevarage;
    }

    public String getDescription() {
        return bevarage.getDescription() + " Whip";
    }

    public double cost() {
        return 0.10 + bevarage.cost();
    }
}

