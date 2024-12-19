// script.js

let files = [];

function addFile(file) {
    files.push(file);
    renderFiles();
}

function deleteFile(index) {
    files.splice(index, 1);
    renderFiles();
}

function renderFiles() {
    const fileList = document.getElementById('file-list');
    fileList.innerHTML = '';
    files.forEach((file, index) => {
        const li = document.createElement('li');
        li.textContent = file.name;
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.onclick = () => deleteFile(index);
        li.appendChild(deleteButton);
        fileList.appendChild(li);
    });
}

// Contoh penggunaan
addFile({ name: 'Foto1.jpg' });
addFile({ name: 'Video1.mp4' });