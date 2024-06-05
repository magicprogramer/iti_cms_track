let xhr = new XMLHttpRequest();
xhr.open("GET", "https://jsonplaceholder.typicode.com/todos");
xhr.send("");
xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200)
    {
        let data = xhr.response;
        data = JSON.parse(data);
        let content = document.getElementById("content");
        let data_table = document.createElement("table");
        //add headers 
        for (field in data[0])
        {
            let header = document.createElement("th");
            header.innerHTML = field;
            data_table.appendChild(header);
        }
        for (let row in data)
        {
            //get only the first 30 row 
            if (row > 30)break;
            let table_row = document.createElement("tr");
            for (field in data[row])
            {
                let table_data = document.createElement("td");
                table_data.innerHTML = data[row][field];
                table_row.appendChild(table_data);
                console.log(data[row][field]);
            }
            if (data[row]['completed'])table_row.classList.add("finished");
            else table_row.classList.add("unfinished");
            data_table.appendChild(table_row);
        }
        content.appendChild(data_table);
    }

}