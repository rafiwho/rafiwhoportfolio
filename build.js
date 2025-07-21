import fs from 'fs';
import path from 'path';

console.log('Building static files...');

// Create dist directory
if (!fs.existsSync('dist')) {
    fs.mkdirSync('dist', { recursive: true });
}

// Copy all files from public directory
function copyDir(src, dest) {
    if (!fs.existsSync(dest)) {
        fs.mkdirSync(dest, { recursive: true });
    }
    
    const items = fs.readdirSync(src);
    
    for (const item of items) {
        const srcPath = path.join(src, item);
        const destPath = path.join(dest, item);
        
        if (fs.statSync(srcPath).isDirectory()) {
            copyDir(srcPath, destPath);
        } else {
            fs.copyFileSync(srcPath, destPath);
        }
    }
}

// Copy public assets to dist
copyDir('public', 'dist');

// Copy the static template as index.html
fs.copyFileSync('static-template.html', 'dist/index.html');

console.log('✓ Copied static assets');
console.log('✓ Copied static HTML template');
console.log('✓ Static build completed successfully!'); 