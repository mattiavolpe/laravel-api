## 2024-05-24 - Missing Authorization on Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController`'s `show`, `edit`, `update`, and `destroy` methods allowing users to access others' projects.
**Learning:** Implicit route model binding automatically resolves models but does not enforce ownership. Relying only on route model binding for user-owned resources without explicit authorization checks exposes the application to IDOR vulnerabilities.
**Prevention:** Always explicitly verify model ownership (e.g., `$model->user_id == auth()->id()`) or use Laravel Policies when returning user-specific resources bound via route parameters.
