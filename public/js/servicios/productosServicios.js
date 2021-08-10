const getProductos = async()=>{

    let resp = await axios.get("api/productos/get");
    return resp.data;
};

const crearProductos = async(producto)=>{
    let resp = await axios.post("api/productos/post", producto, {
        headers:{
            'Content-type': 'application/json'
        }
    });
};