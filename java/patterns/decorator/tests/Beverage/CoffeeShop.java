package Beverage;

import Condiment.Mocha;
import Condiment.Soy;
import Condiment.Whip;
import Recipient.Cup;
import Size.Large;
import Size.Small;
import Size.Size;
import org.junit.Assert;
import org.junit.Test;

public class CoffeeShop {

    @Test
    public void decorateAnEspressoWithMochaShowEspressoMocha() {
        Beverage beverage = new Espresso();
        Beverage beverage1 = new Mocha(beverage);

        Assert.assertEquals("Espresso, Mocha", beverage1.getDescription());
    }

    @Test
    public void decorateAnDecafWithSoyAndWhipShowCost1_30() {
        Beverage beverage = new Decaf();
        Beverage beverage1 = new Soy(beverage);
        Beverage beverage2 = new Whip(beverage1);
        Assert.assertEquals(1.30, beverage2.cost(), 0.1);
    }

    @Test
    public void addLargeCupCosting1_35() {
        Beverage beverage = new Decaf();
        Beverage beverage1 = new Soy(beverage);
        Beverage beverage2 = new Whip(beverage1);
        Size large = new Large();
        Cup cup = new Cup(large, beverage2);
        Assert.assertEquals(1.35, cup.cost(), 0.1);
    }
    @Test
    public void addSmallCupCosting() {
        Beverage beverage = new Decaf();
        Size small = new Small();
        Cup cup = new Cup(small, beverage);
        Assert.assertEquals(1.0, cup.cost(), 0.1);
    }
}