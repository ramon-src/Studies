package Size;

public class Small extends Size {
    private String label = "Tall";

    public String getLabel() {
        return label;
    }

    public double cost() {
        return -.05;
    }
}
