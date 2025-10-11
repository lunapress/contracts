# LunaPress Foundation Contracts

The **Foundation Contracts** package defines the *shared ecosystem interfaces* used across all LunaPress packages.  
It describes the abstract building blocks of the platform — packages, service packages, modules, subscribers, and DI adapters —  
without depending on any runtime or WordPress-specific code.

### Purpose
- Acts as the **shared API layer** for all LunaPress packages.
- Defines contracts for the ecosystem layer (not for the WordPress core).
- Enables packages to be fully independent from the WordPress runtime (`core`).