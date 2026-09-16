## 2024-09-16 - Prevent IDOR in Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed users to view, edit, or delete projects belonging to other users via predictable URLs.
**Learning:** The codebase relies on implicit route model binding in controllers like ProjectController, which automatically injects the model instance based on the URL parameter but does not enforce any authorization or ownership checks by default.
**Prevention:** Manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) inside controller methods handling user-specific resources.
