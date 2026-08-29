## 2024-05-24 - Implicit Route Model Binding IDOR
**Vulnerability:** IDOR in ProjectController methods (show, edit, update, destroy).
**Learning:** The codebase relies on implicit route model binding which automatically fetches the model but doesn't check if it belongs to the authenticated user, leading to IDOR.
**Prevention:** Always manually verify ownership (e.g., `$model->user_id == auth()->id()`) when using implicit route model binding for user-specific resources.
