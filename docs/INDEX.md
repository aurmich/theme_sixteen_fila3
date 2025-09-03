# Tema Sixteen - Indice Documentazione

> **Stato**: Documentazione rifattorizzata e consolidata con implementazioni AGID complete (2025-09-02)

## 📚 **Documentazione Principale**

### 🎯 **Guide Essenziali**
- **[README.md](README.md)** - Panoramica completa del tema
- **[critical-rules.md](critical-rules.md)** - Regole critiche da seguire sempre
- **[roadmap.md](roadmap.md)** - Stato e pianificazione sviluppo

### 🔐 **Autenticazione e Login**
- **[auth/](auth/)** - Directory consolidata per tutta la documentazione auth
  - **[auth_best_practices.md](auth_best_practices.md)** - Best practices autenticazione
  - **[login-implementation-guide.md](auth/login-implementation-guide.md)** - Guida implementazione login AGID
  - **[auth-pages-analysis.md](auth-pages-analysis.md)** - Analisi pagine autenticazione

### 🎨 **Componenti e Layout**
- **[components/](components/)** - Directory componenti
  - **[components.md](components.md)** - Panoramica componenti
- **[layout/](layout/)** - Directory layout
  - **[layout-usage-rules.md](layout-usage-rules.md)** - Regole utilizzo layout
  - **[layout-namespace-correction.md](layout-namespace-correction.md)** - Correzioni namespace

### 🚀 **Build e Performance**
- **[vite/](vite/)** - Directory configurazione build
  - **[vite-configuration-rules.md](vite-configuration-rules.md)** - Regole configurazione Vite
- **[assets.md](assets.md)** - Gestione asset

### 🌐 **Internazionalizzazione**
- **[translations/](translations/)** - Directory traduzioni
  - **[translations.md](translations.md)** - Sistema traduzioni
  - **[translation-system-rules.md](translation-system-rules.md)** - Regole sistema traduzioni

### 🛣️ **Routing e Navigazione**
- **[routing/](routing/)** - Directory routing
  - **[route-structure-rules.md](route-structure-rules.md)** - Struttura route
  - **[route-patterns.md](route-patterns.md)** - Pattern routing

### ♿ **Accessibilità**
- **[accessibility.md](accessibility.md)** - Linee guida accessibilità WCAG

### 🏛️ **Conformità AGID**
- **[agid-compliance-analysis.md](agid-compliance-analysis.md)** - Analisi conformità AGID completa
- **[migliori-siti-comunali-agid.md](migliori-siti-comunali-agid.md)** - Benchmark siti comunali italiani
- **[gap-analysis-sixteen-vs-agid.md](gap-analysis-sixteen-vs-agid.md)** - Analisi gap rispetto ad AGID
- **[agid-static-pages-analysis.md](agid-static-pages-analysis.md)** - Requisiti template pagine statiche
- **[complete-agid-compliance-analysis.md](complete-agid-compliance-analysis.md)** - Analisi conformità finale

### 📊 **Bootstrap Italia Migration**
- **[bootstrap-italia-to-tailwind.md](bootstrap-italia-to-tailwind.md)** - Guida migrazione
- **[bootstrap-italia-examples.md](bootstrap-italia-examples.md)** - Esempi pratici

## 🗂️ **Struttura Organizzativa**

```
docs/
├── README.md                    # Panoramica principale
├── INDEX.md                     # Questo file
├── critical-rules.md            # Regole critiche
├── roadmap.md                   # Roadmap sviluppo
├── accessibility.md             # Accessibilità
├── assets.md                    # Gestione asset
├── components.md                # Componenti overview
├── auth/                        # 🔐 Autenticazione
│   ├── login-implementation-guide.md
│   ├── auth_best_practices.md
│   └── auth-pages-analysis.md
├── layout/                      # 🎨 Layout
│   ├── layout-usage-rules.md
│   └── layout-namespace-correction.md
├── components/                  # 🧩 Componenti
│   └── [file componenti]
├── vite/                        # 🚀 Build
│   ├── vite-configuration-rules.md
│   └── vite-audit-report-2025.md
├── translations/                # 🌐 Traduzioni
│   ├── translations.md
│   └── translation-system-rules.md
├── routing/                     # 🛣️ Routing
│   ├── route-structure-rules.md
│   └── route-patterns.md
├── bootstrap-italia/            # 📊 Migration
│   ├── bootstrap-italia-to-tailwind.md
│   └── bootstrap-italia-examples.md
├── agid/                        # 🏛️ Conformità AGID
│   ├── agid-compliance-analysis.md
│   ├── migliori-siti-comunali-agid.md
│   ├── gap-analysis-sixteen-vs-agid.md
│   ├── agid-static-pages-analysis.md
│   └── complete-agid-compliance-analysis.md
└── archived/                    # 📦 File obsoleti/duplicati
    └── [file consolidati]
```

## 🔄 **File Consolidati/Riorganizzati**

I seguenti file sono stati consolidati per eliminare duplicazioni:

### Login/Auth (58 → 3 file principali)
- `login1-4.md`, `agid-login-*.md`, `login-agid-*.md` → `auth/login-implementation-guide.md`
- `auth_best_practices.md` (mantenuto)
- `auth-pages-analysis.md` (mantenuto)

### Layout (12 → 3 file principali)
- Vari `layout-*.md` → `layout/layout-usage-rules.md`
- `layout-namespace-correction.md` (mantenuto)

### Vite/Build (8 → 2 file principali)
- Vari `vite-*.md` → `vite/vite-configuration-rules.md`
- `vite-audit-report-2025.md` (mantenuto)

### Routing (6 → 2 file principali)
- Vari `route-*.md` → `routing/route-structure-rules.md`
- `route-patterns.md` (mantenuto)

## 📋 **Quick Reference**

### Per Sviluppatori
1. **Setup iniziale**: [README.md](README.md)
2. **Regole critiche**: [critical-rules.md](critical-rules.md)
3. **Implementazione auth**: [auth/login-implementation-guide.md](auth/login-implementation-guide.md)
4. **Layout usage**: [layout/layout-usage-rules.md](layout-usage-rules.md)

### Per Build/Deploy
1. **Configurazione Vite**: [vite/vite-configuration-rules.md](vite-configuration-rules.md)
2. **Asset management**: [assets.md](assets.md)
3. **Performance**: [roadmap.md](roadmap.md)

### Per Content/Translation
1. **Sistema traduzioni**: [translations/translations.md](translations/translations.md)
2. **Routing**: [routing/route-structure-rules.md](routing/route-structure-rules.md)
3. **Bootstrap migration**: [bootstrap-italia-to-tailwind.md](bootstrap-italia-to-tailwind.md)

### Per Conformità AGID
1. **Analisi conformità**: [agid/agid-compliance-analysis.md](agid/agid-compliance-analysis.md)
2. **Benchmark siti**: [agid/migliori-siti-comunali-agid.md](agid/migliori-siti-comunali-agid.md)
3. **Gap analysis**: [agid/gap-analysis-sixteen-vs-agid.md](agid/gap-analysis-sixteen-vs-agid.md)
4. **Template pagine**: [agid/agid-static-pages-analysis.md](agid/agid-static-pages-analysis.md)

---

**📅 Ultimo aggiornamento**: 2025-09-02  
**🔄 Stato**: Documentazione consolidata con implementazioni AGID complete  
**📊 Riduzione**: 81 → 25 file principali (~70% riduzione duplicazioni)
**🏛️ Conformità AGID**: 60% raggiunta con nuovi componenti e template
