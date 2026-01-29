
from datetime import datetime
from collections import defaultdict


ventas = [
    {"cliente": "Ana", "monto": "120.50", "fecha": "2026-01-20", "pais": "CO"},
    {"cliente": "Luis", "monto": "85", "fecha": "2026/01/21", "pais": "CO"},
    {"cliente": "Ana", "monto": None, "fecha": "2026-01-22", "pais": "MX"},
    {"cliente": "Maria", "monto": "210.00", "fecha": "22-01-2026", "pais": "CO"},
    {"cliente": "Luis", "monto": "error", "fecha": "2026-01-23", "pais": "CO"},
    {"cliente": "Carlos", "monto": "99.99", "fecha": "2026-01-23", "pais": None},
]

print(ventas)

formatos_fecha = [
    "%Y-%m-%d",
    "%Y/%m/%d",
    "%d-%m-%Y",
]

ventasLimpias = []

for venta in ventas:
    try:
        monto = float(venta['monto'])
    except(TypeError, ValueError):
        continue

    fechaNormalizada = None
    for fmt in formatos_fecha:
        try:
            fechaNormalizada = datetime.strptime(venta['fecha'], fmt).strftime('%Y-%m-%d')
            break
        except ValueError:
            pass

    if fechaNormalizada is None:
        continue

    pais = venta['pais'] if venta['pais'] is not None else 'DESCONOCIDO'

    ventasLimpias.append({
        'cliente': venta['cliente'],
        'monto': monto,
        'fecha': fechaNormalizada,
        'pais': pais
    })

print(ventasLimpias)


# Total de ventas válidas
total_ventas = sum(v["monto"] for v in ventasLimpias)

# Venta promedio
venta_promedio = total_ventas / len(ventasLimpias)

# Total por país
ventas_por_pais = defaultdict(float)
for v in ventasLimpias:
    ventas_por_pais[v["pais"]] += v["monto"]

# Cliente que más gastó
gasto_por_cliente = defaultdict(float)
for v in ventasLimpias:
    gasto_por_cliente[v["cliente"]] += v["monto"]

cliente_top = max(gasto_por_cliente, key=gasto_por_cliente.get)
