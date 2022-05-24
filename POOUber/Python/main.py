from car import Car
from account import Account

if __name__=="__main__":
    print("Hola Mundo")

    car = Car("QSL0945", Account("Juan Davila", "JPG2456"))
    print(vars(car))
    print(vars(car.driver))

