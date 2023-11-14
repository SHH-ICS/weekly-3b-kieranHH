XL = 10
Large = 6
OneToppings = 1
TwoToppings = 1.75
ThreeToppings = 2.5
FourToppings = 3.35
ifcondition = True
ifcondition2 = True
Tax = 0.13

while ifcondition:
    print("What's your pizza size")
    PizzaSize = (input("large or XL"))
    if PizzaSize ==  "large" or PizzaSize == "XL" :
        ifcondition = False
       
if PizzaSize ==  "large":
    PizzaCost = Large
if PizzaSize == "XL":
    PizzaCost = XL

while ifcondition2:
    print("How many topings do you want")
    PizzaTop = (input("1, 2, 3 or 4"))
    if PizzaTop == "1" or "2" or "3" or "4":
        ifcondition2 = False

if PizzaTop == "1":
    PizzaCost = PizzaCost + OneToppings
if PizzaTop == "2":
    PizzaCost = PizzaCost + TwoToppings
if PizzaTop == "3":
    PizzaCost = PizzaCost + ThreeToppings
if PizzaTop == "4":
    PizzaCost = PizzaCost + FourToppings

Subtotal = PizzaCost
print(" Subtotal: $"+ str(PizzaCost))
Tax = Tax * Subtotal
print(" Tax: $" + str(round(Tax, 2)))
Total = Tax + Subtotal
print(" Total: $" + str(round(Total, 2)))
