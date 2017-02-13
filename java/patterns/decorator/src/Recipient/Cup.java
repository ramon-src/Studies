package Recipient;

import Beverage.Beverage;
import Size.Size;

public class Cup {
    private Size size;
    private Beverage beverage;

    public Cup(Size size, Beverage beverage) {
        this.size = size;
        this.beverage = beverage;
    }

    public Size getSize() {
        return size;
    }

    public void setSize(Size size) {
        this.size = size;
    }

    public Beverage getBeverage() {
        return beverage;
    }

    public void setBeverage(Beverage beverage) {
        this.beverage = beverage;
    }

    public double cost() {
        return beverage.cost() + size.cost();
    }
}
