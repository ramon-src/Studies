package Condiment;

import Beverage.Beverage;

public class SteamedMilk extends CondimentDecorator {

    private Beverage bevarage;

    public SteamedMilk(Beverage bevarage) {
        this.bevarage = bevarage;
    }

    public String getDescription() {
        return bevarage.getDescription() + " Steamed Milk";
    }

    public double cost() {
        return 0.10 + bevarage.cost();
    }
}

