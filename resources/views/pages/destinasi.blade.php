@extends('master')

@section('content')
<style>
body {
    margin: 0;
    padding: 0;
}

.bali-background-container {
    min-height: 100vh;
    background: url('https://a.cdn-hotels.com/gdcs/production86/d1396/24c2f7a5-ff3f-496f-b9fa-77bab2619024.jpg') center/cover fixed;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem 1rem;
}

.bali-background-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(255, 165, 0, 0.3) 100%);
    backdrop-filter: blur(2px);
    z-index: 1;
}

.bali-ticket-card {
    max-width: 700px;
    width: 100%;
    margin: 2rem auto;
    background: linear-gradient(145deg, 
        rgba(255,255,255,0.95) 0%, 
        rgba(255,255,255,0.85) 100%);
    border-radius: 25px;
    padding: 3.5rem 2.5rem;
    box-shadow: 
        0 25px 50px rgba(0,0,0,0.15),
        0 0 0 1px rgba(255,255,255,0.5);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255,255,255,0.3);
    position: relative;
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
    z-index: 2;
}

.bali-ticket-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #FF6B35, #F7931E, #FFD23F);
}

.ticket-header {
    text-align: center;
    margin-bottom: 2.5rem;
    position: relative;
}

.ticket-title {
    background: linear-gradient(45deg, #FF6B35, #F7931E);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 1.8rem;
    font-weight: 700;
    margin: 0 0 0.5rem 0;
}

.ticket-subtitle {
    color: #666;
    font-size: 0.9rem;
    margin: 0;
}

.ticket-body {
    display: grid;
    gap: 1.2rem;
    margin-bottom: 2rem;
}

.ticket-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.2rem 0;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.ticket-label {
    font-weight: 600;
    color: #2C5530;
    font-size: 0.95rem;
}

.ticket-value {
    font-weight: 500;
    color: #1a1a1a;
}

.ticket-price {
    background: linear-gradient(135deg, #FF6B35, #F7931E);
    color: white;
    padding: 1.5rem;
    border-radius: 15px;
    text-align: center;
    font-size: 1.4rem;
    font-weight: 700;
    margin-top: 1.5rem;
}

.ticket-fasilitas {
    background: rgba(152,216,200,0.3);
    border-radius: 12px;
    padding: 1.5rem;
    margin-top: 1.5rem;
}

.fasilitas-title {
    color: #2C5530;
    font-weight: 600;
    margin: 0 0 0.8rem 0;
    font-size: 1rem;
}

.fasilitas-list {
    list-style: none;
    padding: 0;
    margin: 0;
    max-height: none;
    overflow-y: visible;
    display: grid;
    gap: 0.8rem;
}

.fasilitas-list li {
    padding: 0.7rem 0;
    font-size: 0.95rem;
    color: #1a1a1a;
}

.decor-sun {
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 3rem;
    opacity: 0.3;
}

.decor-palm {
    position: absolute;
    bottom: -15px;
    left: -15px;
    font-size: 2.5rem;
    opacity: 0.4;
}
</style>

<div class="bali-background-container">
    <div class="bali-ticket-card">
        <div class="decor-sun">☀️</div>
        <div class="decor-palm">🌴</div>
    
    <div class="ticket-header">
        <h1 class="ticket-title">🌊 {{ $destinasi['nama'] }}</h1>
        <p class="ticket-subtitle">Tiket Liburan Impian Bali</p>
    </div>
    
    <div class="ticket-body">
        <div class="ticket-row">
            <span class="ticket-label">📍 Lokasi</span>
            <span class="ticket-value">{{ $destinasi['lokasi'] }}</span>
        </div>
        
        <div class="ticket-row">
            <span class="ticket-label">⏱️ Durasi</span>
            <span class="ticket-value">{{ $destinasi['durasi'] }}</span>
        </div>
        
        <div class="ticket-row">
            <span class="ticket-label">🚗 Transportasi</span>
            <span class="ticket-value">{{ $destinasi['transportasi'] }}</span>
        </div>
        
        <div class="ticket-row">
            <span class="ticket-label">🏨 Hotel</span>
            <span class="ticket-value">{{ $destinasi['hotel'] }}</span>
        </div>
        
        <div class="ticket-row">
            <span class="ticket-label">⭐ Rating</span>
            <span class="ticket-value">{{ $destinasi['rating'] }}/5</span>
        </div>
    </div>
    
    <div class="ticket-price">
        💰 Rp {{ $destinasi['harga'] }}
    </div>
    
    <div class="ticket-fasilitas">
        <h3 class="fasilitas-title">🏝️ Fasilitas:</h3>
        <ul class="fasilitas-list">
            @foreach($destinasi['fasilitas'] as $fasilitas)
                <li>✨ {{ $fasilitas }}</li>
            @endforeach
        </ul>
    </div>
    </div>
</div>
@endsection