from payment import Payment 

class Card(Payment):
    numer = int
    cvv = int 
    date = str

    def __init__(self, id, number, cvv, date):
        super.__init__(id)
        self.numer = number
        self.cvv = cvv
        self.date = date