<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COE Admin Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style-kelola-akun.css">
</head>
<body>
    <div class="admin-dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="branding">
                <div class="brand-logo">
                    <i class="fas fa-university" style="color: var(--glass);"></i>
                </div>
                <h2 style="color: white;">COE Master</h2>
            </div>
            
            <div class="nav-item active">
                <i class="fas fa-users"></i>
                Kelola Admin
            </div>
            <div class="nav-item">
                <i class="fas fa-chart-line"></i>
                Statistik
            </div>
        </div>

        <!-- Main Content -->
        <main class="main-content">
            <div class="header">
                <h1>Kelola Admin COE</h1>
                <div class="search-box">
                    <input type="text" placeholder="Cari admin..." class="search-input">
                </div>
            </div>

            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>Total Admin</h3>
                    <div class="stat-value">15</div>
                </div>
                <div class="stat-card">
                    <h3>COE Aktif</h3>
                    <div class="stat-value">8</div>
                </div>
            </div>

            <!-- Admin List -->
            <div class="admin-grid">
                <!-- Admin Card 1 -->
                <div class="admin-card">
                    <div class="admin-actions">
                        <button class="action-btn"><i class="fas fa-edit"></i></button>
                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                    </div>
                    <div class="admin-header">
                        <div class="admin-avatar">AD</div>
                        <div>
                            <h2>Admin Teknik</h2>
                            <p class="coe-name">COE Teknik Mesin</p>
                        </div>
                    </div>
                    <div class="admin-info">
                        <p><i class="fas fa-envelope"></i> admin.teknik@polibatam.ac.id</p>
                        <p><i class="fas fa-clock"></i> Terakhir aktif: 2 jam lalu</p>
                    </div>
                </div>

                <!-- Tambahkan admin card lainnya -->
            </div>

            <!-- Floating Action Button -->
            <button class="submit-btn" style="position: fixed; bottom: 2rem; right: 2rem; width: auto; padding: 1rem 2rem;" onclick="showModal()">
                <i class="fas fa-plus"></i> Tambah Admin
            </button>
        </main>
    </div>

    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Tambah Admin Baru</h2>
                <button class="close-btn" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form>
                <div class="input-group">
                    <label class="input-label">Nama Lengkap</label>
                    <input type="text" class="input-field" required>
                </div>
                
                <div class="input-group">
                    <label class="input-label">Password</label>
                    <input type="password" class="input-field" required>
                </div>
                
                <div class="input-group">
                    <label class="input-label">Pilih COE</label>
                    <select class="select-field" required>
                        <option value="">Pilih COE</option>
                        <option>Commercialization & product sales</option>
                        <option>COX BIZHUB</option>
                        <option>Global Trade and Supply Chain Management</option>
                        <option>COX AFINTEC</option>
                        <option>Tax Center</option>
                    </select>
                </div>
                
                <button type="submit" class="submit-btn">Simpan</button>
            </form>
        </div>
    </div>

    <script>
        // Modal Handling
        const modal = document.getElementById('modal');

        function showModal() {
            modal.style.display = 'flex';
            setTimeout(() => {
                document.querySelector('.modal-content').classList.add('modal-active');
            }, 10);
        }

        function closeModal() {
            document.querySelector('.modal-content').classList.remove('modal-active');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300);
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>