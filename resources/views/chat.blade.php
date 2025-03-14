@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Konsultasi Chatbot</div>
        <div class="card-body">
            <div id="chat-box" class="mb-3" style="height: 300px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                <!-- Chat history akan ditampilkan di sini -->
            </div>
            <div class="input-group">
                <input type="text" id="user-input" class="form-control" placeholder="Ketik pesan...">
                <button class="btn btn-primary" onclick="sendMessage()">Kirim</button>
            </div>
        </div>
    </div>
@endsection

<script>
    function sendMessage() {
        const input = document.getElementById('user-input').value;
        const chatBox = document.getElementById('chat-box');
        chatBox.innerHTML += `<div class="text-end"><b>Anda:</b> ${input}</div>`;
        // Kirim ke backend jika diperlukan
        document.getElementById('user-input').value = '';
    }
</script>
