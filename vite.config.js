export default {
    root: '.',
    build: {
        outDir: 'dist',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                main: '/index.html'
            }
        }
    },
    publicDir: 'public'
}
