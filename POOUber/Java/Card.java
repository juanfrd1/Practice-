package Java;

public class Card extends Payment{
    Integer numerCard;
    String dateCard;
    String cvv;

    public Card(Integer id, Integer numerCard, String dateCard, String cvv){
        super (id);
        this.numerCard = numerCard;
        this.dateCard = dateCard;
        this.cvv = cvv;
    }
}
