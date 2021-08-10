const cargarCategorias = async()=>{
    let result = await axios.get("api/categorias/get");
    let categorias = result.data;

    let categoriasSelect = document.querySelector("#categorias-select");
    categorias.forEach(m=> {
        let option = document.createElement("option");
        option.innerText = m;
        categoriasSelect.appendChild(option);
    });


};

document.addEventListener("DomContentLoader", ()=>{
    cargarCategorias();
});


document.querySelector("#registrar-btn").addEventListener("click", ()=>{
    let nombre = document.querySelector("#nombre-txt").value;
    let categorias = document.querySelector("#categorias-select").value;
    let cantidad = document.querySelector("#cant-txt").value;
    let precio = document.querySelector("#precio-txt").value;
    let img = document.querySelector("#img-txt").value;
    let descr = document.query.querySelector("#descripcion-txt").value;

    let producto = {};
    producto.nombre = nombre;
    producto.categorias = categorias;
    producto.cantidad = cantidad;
    producto.precio = precio;
    producto.img = img;
    producto.descr = descr;
});