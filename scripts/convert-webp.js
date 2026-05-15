import sharp from 'sharp';
import { readdirSync } from 'fs';
import { join, extname, basename } from 'path';

const dir = 'source/assets/images';
const files = readdirSync(dir).filter(f => /\.(jpg|jpeg)$/i.test(f));

for (const file of files) {
    const input = join(dir, file);
    const output = join(dir, basename(file, extname(file)) + '.webp');
    await sharp(input).webp({ quality: 82 }).toFile(output);
    console.log(`converted ${file} → ${basename(output)}`);
}
