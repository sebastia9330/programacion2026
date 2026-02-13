#Restaurante en python

class Restaurante:
    def __init__(self):
        self.menu = {}
        self.mesas = {}
        self.mesas_reservadas = {}
        self.ordenes = {}

    def add_item(self, item, precio):
        self.menu[item] = precio

    def reserva_mesas(self, numero, nombreCliente):
        if numero not in self.mesas_reservadas:
            self.mesas_reservadas[numero] = nombreCliente
        else:
            print(f'Lo siento, la mensa {numero} esta reservada')

    def pedidos(self, numero, items):
        if numero not in self
        self.ordenes[numero] = items

restaurante = Restaurante()
print(restaurante)
restaurante.add_item('Hamburguesa', 25000)
restaurante.add_item('Pizza', 8500)
print(restaurante.menu)
restaurante.reserva_mesas(1, 'Juan')
restaurante.reserva_mesas(2, 'Pedro')
restaurante.reserva_mesas(2, 'Lucia')
print(restaurante.mesas_reservadas)
restaurante.pedidos(1,['Hamburguesa', 'Pizza'])
print(restaurante.ordenes)