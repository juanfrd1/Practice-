package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND12345"), "Hyundai", "i10");

        uberX.setPassenger(4);
        uberX.printDataCar();


        UberVan uberVan = new UberVan("FET4362", new Account("Andres Herrera", "AND12345"));

        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }
}