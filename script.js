document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.nav-toggle');
    const menu = document.querySelector('.nav-menu');

    toggle?.addEventListener('click', () => {
        menu?.classList.toggle('active');
    });

    document.querySelectorAll('.nav-item').forEach(item => {
        item.addEventListener('click', () => {
            menu?.classList.remove('active');
        });
    });

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

    if (document.getElementById('cmd1')) {
        runTerminalAnimation();
    }
});

function typeWriter(element, text, speed = 50) {
    let i = 0;
    return new Promise((resolve) => {
        function type() {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed);
            } else {
                resolve();
            }
        }
        type();
    });
}

async function runTerminalAnimation() {
    await new Promise(resolve => setTimeout(resolve, 500));
    
    const cmd1 = document.getElementById('cmd1');
    const output1 = document.getElementById('output1');
    const cmd2 = document.getElementById('cmd2');
    const output2 = document.getElementById('output2');
    const cmd3 = document.getElementById('cmd3');
    
    await typeWriter(cmd1, 'go run main.go', 80);
    await new Promise(resolve => setTimeout(resolve, 300));
    output1.textContent = 'Server listening on :8080\nDatabase connected successfully\nWorker pool initialized: 4 workers';
    
    await new Promise(resolve => setTimeout(resolve, 800));
    await typeWriter(cmd2, 'docker ps', 80);
    await new Promise(resolve => setTimeout(resolve, 300));
    output2.textContent = 'judgenot0-engine   Up 2 hours   0.0.0.0:8080->8080/tcp\njudgenot0-postgres Up 2 hours   0.0.0.0:5432->5432/tcp\njudgenot0-rabbitmq Up 2 hours   0.0.0.0:5672->5672/tcp';
    
    await new Promise(resolve => setTimeout(resolve, 800));
    await typeWriter(cmd3, 'git status', 80);
}


function resetTerminal() {
  const ids = ['cmd1','cmd2','cmd3','output1','output2'];
  for (const id of ids) {
    const el = document.getElementById(id);
    if (el) el.textContent = '';
  }
}

async function startTerminal() {
  const cmd1 = document.getElementById('cmd1');
  const out1 = document.getElementById('output1');
  const cmd2 = document.getElementById('cmd2');
  const out2 = document.getElementById('output2');
  const cmd3 = document.getElementById('cmd3');
  if (!cmd1 || !out1 || !cmd2 || !out2 || !cmd3) return;

  resetTerminal();
  await runTerminalAnimation();
}

function tryStartTerminal(retries = 20) {
  if (document.getElementById('cmd1')) {
    startTerminal();
    return;
  }
  if (retries <= 0) return;
  setTimeout(() => tryStartTerminal(retries - 1), 150);
}

document.addEventListener('DOMContentLoaded', () => {
  tryStartTerminal();
});
