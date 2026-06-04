import Reveal from 'reveal.js';
import Markdown from 'reveal.js/plugin/markdown/markdown.esm.js';

// Import styles (ensure your bundler supports CSS imports)
import 'reveal.js/dist/reveal.css';
import 'reveal.js/dist/theme/black.css';

const deck = new Reveal({
    plugins: [ Markdown ]
});

deck.initialize();