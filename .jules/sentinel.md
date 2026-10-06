## 2024-10-06 - Missing Ownership Checks on Implicit Route Bindings
**Vulnerability:** IDOR in ProjectController where users could access other users' projects because implicit route binding doesn't inherently check ownership.
**Learning:** In Laravel, when using implicit route model binding for user-specific resources, the model is fetched by ID, but without global scopes or explicit checks, it can return records belonging to other users.
**Prevention:** Always manually enforce explicit ownership checks (e.g., checking `user_id` against `auth()->id()`) or use authorization policies for user-specific resources.
