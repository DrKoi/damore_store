const cargarCategorias = async()=>{
    //Ir a buscar categorias a la api
    let result = await axios.get("api/categorias/get");
    let categorias = result.data;

    let categoriasSelect = document.querySelector("#categorias-select");
    categorias.forEach(m=> {
        let option = document.createElement("option");
        option.innerText = m;
        categoriasSelect.appendChild(option);
    });


};

cargarCategorias();