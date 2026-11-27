panel.plugin("orma/blocks", {
  blocks: {
    "orma-page-opening": {
      template: `
        <div class="k-block-orma-opening" @click="open">
          <div class="k-block-orma-opening-title">
            {{ content.title || "APERTURA PAGINA (TITOLO PAGINA)" }}
          </div>
        </div>
      `
    },
    "orma-archive-grid": {
      computed: {
        sourceLabel() {
          const picked = this.content.source || this.content.parent;
          if (picked && picked.length) {
            return picked[0].text || "Archivio";
          }
          return "Archivio";
        }
      },
      template: `
        <div class="k-block-orma-archive-grid" @click="open">
          <div class="k-block-orma-archive-grid-header">
            Griglia Archivio (4 colonne) — {{ sourceLabel }}
          </div>
          <div class="k-block-orma-archive-grid-tiles">
            <div class="k-block-orma-archive-grid-tile" v-for="n in 4" :key="n">
              <div class="k-block-orma-archive-grid-thumb"></div>
              <div class="k-block-orma-archive-grid-line"></div>
              <div class="k-block-orma-archive-grid-line is-short"></div>
            </div>
          </div>
        </div>
      `
    }
  }
});
