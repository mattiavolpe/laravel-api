## 2024-10-26 - Missing Authorization in Implicit Route Binding
**Vulnerability:** IDOR in ProjectController allowing users to access and modify projects belonging to other users.
**Learning:** Implicit route model binding in Laravel does not automatically enforce authorization checks for user-specific resources.
**Prevention:** Always manually enforce explicit ownership checks (e.g., using `auth()->id()`) when accessing user-specific resources via route binding.
