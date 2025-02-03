// Script para adicionar interatividade ao Blog Responsivo

// Exemplo: Mensagem ao clicar no botão "Leia Mais"
document.querySelectorAll('.btn-primary').forEach(button => {
    button.addEventListener('click', () => {
        alert('Você clicou para saber mais sobre este post!');
    });
});

// Exemplo: Suavização no Scroll ao clicar em links de navegação
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Alternância de tema claro/escuro (Dark Mode)
const toggleThemeButton = document.createElement('button');
toggleThemeButton.textContent = 'Alternar Tema';
toggleThemeButton.classList.add('btn', 'btn-secondary', 'position-fixed', 'bottom-0', 'end-0', 'm-3');
document.body.appendChild(toggleThemeButton);

toggleThemeButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    const isDarkMode = document.body.classList.contains('dark-mode');
    toggleThemeButton.textContent = isDarkMode ? 'Modo Claro' : 'Modo Escuro';
});

// Estilos adicionais para o modo escuro
if (!document.getElementById('dark-mode-styles')) {
    const darkModeStyles = document.createElement('style');
    darkModeStyles.id = 'dark-mode-styles';
    darkModeStyles.textContent = `
        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }
        body.dark-mode .navbar, body.dark-mode footer {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }
        body.dark-mode a.nav-link, body.dark-mode .btn-primary {
            color: #007bff;
        }
    `;
    document.head.appendChild(darkModeStyles);
}

console.log('Blog Responsivo: JavaScript carregado com sucesso!');
