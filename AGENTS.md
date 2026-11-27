# Regole del progetto Orma

## Workflow Git e GitHub
- Repository remota: `https://github.com/mattiacandini2006-star/orma.git` (branch `main`).
- **Dopo ogni modifica al sito**, eseguire sempre:
  1. `git add` dei file modificati (rispettando `.gitignore`, senza mai includere `site/accounts/`, `site/sessions/`, `site/cache/`, `media/` o file di licenza).
  2. `git commit` con un **messaggio di commit personalizzato**, chiaro e descrittivo delle modifiche effettuate (es. `feat: aggiunta griglia archivio in home`, `style: tipografia e palette da Figma`, `fix: layout mobile scheda opera`).
  3. `git push origin main` per pubblicare subito le modifiche sulla repository GitHub.

## Identità visiva (da Figma)
- **Colori**: bianco (`#ffffff`) e nero del sito (`#333333`, `--color-black`).
- **Font**: `ABC Monument Grotesk` (default/body) e `ABC Maxi Round` (titolazioni e testi grandi).
- **Margini globali**: `40px` (`--page-padding: 40px`).
- **Sfumatura standard da Figma**: ogni volta che l'utente richiede la sfumatura del sito, applicare l'ombra/sfumatura con `blur: 75px` e `spread: 75px` in `#333333` (`--orma-fade-shadow: 0 0 75px 75px var(--color-black)`), dal lato inferiore verso il basso.
