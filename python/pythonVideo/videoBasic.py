import cv2

captura = cv2.VideoCapture(0, cv2.CAP_DSHOW)

# Configurar la resolución si es necesario
captura.set(cv2.CAP_PROP_FRAME_WIDTH, 640)
captura.set(cv2.CAP_PROP_FRAME_HEIGHT, 480)

# Obtener la resolución real
width = int(captura.get(cv2.CAP_PROP_FRAME_WIDTH))
height = int(captura.get(cv2.CAP_PROP_FRAME_HEIGHT))
print(f"Resolución de grabación: {width}x{height}")

salida = cv2.VideoWriter('VideoSalida.avi', 
                        cv2.VideoWriter_fourcc(*'XVID'),
                        20.0,
                        (width, height))

if not captura.isOpened():
    print("Error: No se pudo abrir la cámara")
    exit()

frame_count = 0
print("Grabando video... Presiona 's' para detener")

while captura.isOpened():
    ret, imagen = captura.read()
    
    if ret:
        frame_count += 1
        
        # Mostrar contador de frames en el video
        cv2.putText(imagen, f"Frames: {frame_count}", (10, 30),
                   cv2.FONT_HERSHEY_SIMPLEX, 1, (0, 255, 0), 2)
        cv2.putText(imagen, "Presiona 's' para salir", (10, 60),
                   cv2.FONT_HERSHEY_SIMPLEX, 0.5, (0, 255, 0), 1)
        
        cv2.imshow('Video', imagen)
        salida.write(imagen)
        
        if cv2.waitKey(1) & 0xFF == ord('s'):
            break
    else:
        break

captura.release()
salida.release()
cv2.destroyAllWindows()

print(f"\nGrabación completada. Total frames: {frame_count}")
print("Video guardado como 'VideoSalida.avi'")