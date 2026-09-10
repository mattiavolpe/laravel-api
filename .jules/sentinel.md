## 2024-05-24 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project endpoints (`show`, `edit`, `update`, `destroy`).
**Learning:** Implicit route model binding retrieves records without applying user-specific scoping, allowing authenticated users to access other users' data.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `$model->user_id !== auth()->id()`) on user-specific resources when using implicit binding.
