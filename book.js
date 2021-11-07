var selectedRow = null

function onFormSubmit()
{
    var formData = readFormData();
    if(selectedRow == null)
    {
        insertNewRecord(formData);
    }
    else
    {
        updateRecord(formData);
    }
    resetForm();
}
function readFormData()
{
    var formData = {};
    formData['isbn'] = document.getElementById('isbn').value;
    formData['titulo'] = document.getElementById('titulo').value;
    formData['autor'] = document.getElementById('autor').value;
    formData['descripcion'] = document.getElementById('descripcion').value;
    formData['stock'] = document.getElementById('stock').value;
    formData['precio'] = document.getElementById('precio').value;
    return formData;
}
function insertNewRecord(data)
{
    var table = document.getElementById('Book-list').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.isbn;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.titulo;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.autor;
    cell3 = newRow.insertCell(3);
    cell3.innerHTML = data.descripcion;
    cell3 = newRow.insertCell(4);
    cell3.innerHTML = data.stock;
    cell3 = newRow.insertCell(5);
    cell3.innerHTML = data.precio;
    cell4 = newRow.insertCell(6);
    cell4.innerHTML = `<a onClick="onEdit(this)" class="btn btn-success btn-sm edit"><i class="far fa-edit" style="pointer-events: none;"></i></a>`;
    cell5 = newRow.insertCell(7);
    cell5.innerHTML = `<a onClick="onDelete(this)" class="btn btn-danger btn-sm delete"><i class="far fa-trash-alt" style="pointer-events: none;"></i></a>`;
}
function resetForm()
{
    document.getElementById('isbn').value = '';
    document.getElementById('titulo').value = '';
    document.getElementById('autor').value = '';
    document.getElementById('descripcion').value = '';
    document.getElementById('stock').value = '';
    document.getElementById('precio').value = '';
    selectedRow = null;
}
function onEdit(td)
{
    selectedRow = td.parentElement.parentElement;
    document.getElementById('isbn').value = selectedRow.cells[0].innerHTML;
    document.getElementById('titulo').value = selectedRow.cells[1].innerHTML;
    document.getElementById('autor').value = selectedRow.cells[2].innerHTML;
    document.getElementById('descripcion').value = selectedRow.cells[3].innerHTML;
    document.getElementById('stock').value = selectedRow.cells[4].innerHTML;
    document.getElementById('precio').value = selectedRow.cells[5].innerHTML;
}
function updateRecord(formData)
{
    selectedRow.cells[0].innerHTML = formData.isbn;
    selectedRow.cells[1].innerHTML = formData.titulo;
    selectedRow.cells[2].innerHTML = formData.autor;
    selectedRow.cells[4].innerHTML = formData.descripcion;
    selectedRow.cells[5].innerHTML = formData.stock;
    selectedRow.cells[6].innerHTML = formData.precio;
}
function onDelete(td)
{
    row = td.parentElement.parentElement;
    document.getElementById('Book-list').deleteRow(row.rowIndex);
    resetForm();
}
