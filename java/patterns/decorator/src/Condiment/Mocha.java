package Condiment;

import Beverage.Beverage;

public class Mocha extends CondimentDecorator {

    private Beverage bevarage;

    public Mocha(Beverage bevarage) {
        this.bevarage = bevarage;
    }

    public String getDescription() {
        return bevarage.getDescription() + ", Mocha";
    }

    public double cost() {
        return 0.20 + bevarage.cost();
    }
}

