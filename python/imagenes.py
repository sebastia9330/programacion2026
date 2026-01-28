import cv2

imagen = cv2.imread('paisaje.jpg',0)
cv2.imshow('Prueba de imagen', imagen)
cv2.imwrite('grises.jpg', imagen)
cv2.waitKey(0)
cv2.destroyAllWindows()