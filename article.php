<style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            max-width: 100px;
            height: auto;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions button {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            color: #fff;
            border-radius: 4px;
        }
        .edit {
            background-color: #4CAF50;
        }
        .delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
    <i class="bi bi-plus-lg"></i> Tambah Article
</button>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>

                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td><img src=nopal.jpg alt=""></td>
                <td class="actions">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td></td>
                <td><img src=nopal.jpg alt=""></td>
                <td class="actions">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td></td>
                <td><img src=nopal.jpg alt=""></td>
                <td class="actions">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td></td>
                <td><img src=nopal.jpg alt=""></td>
                <td class="actions">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td></td>
                <td><img src=nopal.jpg alt=""></td>
                <td class="actions">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>