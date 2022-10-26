
async function StockLista() {
    let reposense = await fetch('http://localhost/Wolfarg/Public/Stock/tabla');
   let reposenseData = await reposense.json();
    console.log(reposenseData)

    if(reposenseData.success){
        const stockTableBody=document.getElementById('stockTableBody');
        reposenseData.result.forEach(item => {
            stockTableBody.insertAdjacentHTML('beforebegin',`<tr>
            <td>${item.Fecha}</td>
            <td>${item.Deposito}</td>
            <td>${item.Tipo}</td>
            <td>${item.Lineas}</td>
            <td>${item.Bultos}</td>
            </tr>`);
        });
    }

};
StockLista();

//StockLista();