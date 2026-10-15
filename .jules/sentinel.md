## 2024-10-15 - Prevent IDOR in ProjectController Route Model Binding
**Vulnerability:** Implicit route model binding in ProjectController (`show`, `edit`, `update`, `destroy`) loaded `Project` models globally, bypassing user ownership checks and creating an Insecure Direct Object Reference (IDOR) vulnerability.
**Learning:** This codebase relies on manual controller-level authorization for user-specific resources rather than global scopes or implicit policies.
**Prevention:** Always manually verify ownership (e.g., `if ($model->user_id != auth()->id()) abort(403);`) at the beginning of controller methods handling bound models for user-owned resources.
