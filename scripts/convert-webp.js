import sharp from 'sharp';
import { readdirSync } from 'fs';
import { join, extname, basename } from 'path';

const dir = 'source/assets/images';
const MAX_WIDTH = 1920;
const files = readdirSync(dir).filter(f => /\.(jpg|jpeg)$/i.test(f));

for (const file of files) {
    const input = join(dir, file);
    const output = join(dir, basename(file, extname(file)) + '.webp');
    const meta = await sharp(input).metadata();
    const needsResize = meta.width > MAX_WIDTH;
    let pipeline = sharp(input).withMetadata(false);
    if (needsResize) pipeline = pipeline.resize({ width: MAX_WIDTH, withoutEnlargement: true });
    await pipeline.webp({ quality: 65 }).toFile(output);
    console.log(`${file} → ${basename(output)} (${meta.width}×${meta.height}${needsResize ? ' → resized' : ''})`);
}
