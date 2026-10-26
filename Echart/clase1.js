const filas = [
    { sede: "Norte",    mes: "Ene", meta: 20, ejecutadas: 18 },
    { sede: "Norte",    mes: "Feb", meta: 20, ejecutadas: 22 },
    { sede: "Sur",      mes: "Ene", meta: 15, ejecutadas: 15 },
    { sede: "Sur",      mes: "Feb", meta: 15, ejecutadas: 11 },
    { sede: "Calle 26", mes: "Ene", meta: 10, ejecutadas: 7  },
    { sede: "Calle 26", mes: "Feb", meta: 10, ejecutadas: 12 }
];

/*suma de ejecuciones */
const totalSumaEjecuciones = filas.reduce((acumulador,objeto) => {
    return acumulador + objeto.ejecutadas;
}, 0);

console.log(totalSumaEjecuciones);

/* filas en meta */
const filasMeta = filas.filter(f => f.ejecutadas > f.meta)
console.log(filasMeta)


// columna de porcentaje
const filasConPct = filas.map((fila) => {
    const porcentaje = (fila.ejecutadas / fila.meta) * 100;
    return{
        sede: fila.sede,
        mes: fila.mes,
        meta: fila.meta,
        ejecutadas: fila.ejecutadas,
        pct: Number(porcentaje.toFixed(1))
    };
});

console.log(filasConPct)

//Agrupacion en js
const totales = {};

for(const fila of filasConPct){
    const sede = fila.sede;

    if(!totales[sede]){
        totales[sede] = {meta: 0, ejecutadas: 0};
    }

    totales[sede].meta += fila.meta;
    totales[sede].ejecutadas += fila.ejecutadas;

}

console.log(totales);

const agrupoadoArray = Object.entries(totales).map(([sede, valores]) => ({
    sede,
    meta: valores.meta,
    ejecutadas: valores.ejecutadas
}));

console.log(agrupoadoArray);


const ordenadoPorPct = [...filasConPct].sort((a,b) => b.pct - a.pct);
console.log(ordenadoPorPct)



function resumenPorSede(filas) {
    const totales = {};

    for (const fila of filas) {
        const sede = fila.sede;

        if (!totales[sede]) {
            totales[sede] = { meta: 0, ejecutadas: 0 };
        }

        totales[sede].meta += fila.meta;
        totales[sede].ejecutadas += fila.ejecutadas;
    }

    return totales;
}

console.log("prueba de funcion")
const resultado = resumenPorSede(filas);
console.log(resultado);


const filasMasNuevaSede = [
    { sede: "Norte",    mes: "Ene", meta: 20, ejecutadas: 18 },
    { sede: "Norte",    mes: "Feb", meta: 20, ejecutadas: 22 },
    { sede: "Sur",      mes: "Ene", meta: 15, ejecutadas: 15 },
    { sede: "Sur",      mes: "Feb", meta: 15, ejecutadas: 11 },
    { sede: "Calle 26", mes: "Ene", meta: 10, ejecutadas: 7  },
    { sede: "Calle 26", mes: "Feb", meta: 10, ejecutadas: 12 },
    { sede: "Kennedy", mes: "Oct", meta: 100, ejecutadas: 85 },
    { sede: "Kennedy", mes: "Oct", meta: 100, ejecutadas: 85 }
];


console.log("prueba de funcion 2 ")
const resultadoNuevaSede = resumenPorSede(filasMasNuevaSede);
console.log(resultadoNuevaSede);


const etiquetas = agrupoadoArray.map(x => x.sede);    
const valores   = agrupoadoArray.map(x => x.ejecutadas);