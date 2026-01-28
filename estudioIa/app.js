function update(color) {
    const { r, g, b } = color.channels;
    const rgb = [r,g,b]
    //console.log(rgb);
    var div = document.getElementById("sitio");
    div.style.background = color;

    //tomar el color elegido para entrenamiento
    var entrada = {
        rojo: rgb[0]/255,
        verde: rgb[1]/255,
        azul: rgb[2]/255
    }

    var resultado = network.run(entrada);
    console.log(resultado)

    if(resultado.color > .5){
        div.style.color = "white"
    }else{
        div.style.color = "black"
    }
    

}

var network = new brain.NeuralNetwork();

network.train([
    //fondo negro (entrada en 0) = texto blanco (salida = 1)
    {input: {rojo:0, verde:0, azul:0}, output: {color:1}},
    //fondo blanco (entrada en 1) = texto negro (salida = 0)
    {input: {rojo:1, verde:1, azul:1}, output: {color:0}},
    //fondo verde texto negro
    {input: {rojo:0, verde:1, azul:0}, output: {color:0}},
    //fondo azul texto blanco
    {input: {rojo:0, verde:.43, azul:1}, output: {color:1}},
    //fondo rojo texto blanco
    {input: {rojo:1, verde:0, azul:0}, output: {color:1}}
])