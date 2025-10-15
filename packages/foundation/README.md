# LunaPress Foundation Contracts

The **Foundation Contracts** package defines the *shared architectural interfaces*
used across all LunaPress packages and plugins.

It models the common building blocks of a WordPress-based plugin ecosystem —
packages, modules, services, and subscribers —
without directly calling or relying on WordPress runtime functions.

### Purpose
- Acts as the **shared API layer** for all LunaPress packages and plugins.
- Defines a **consistent architectural language** (modules, packages, services, subscribers).
- Enables packages to interoperate within the LunaPress ecosystem without coupling to a specific plugin.
