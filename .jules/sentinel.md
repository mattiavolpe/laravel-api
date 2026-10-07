## 2024-10-07 - IDOR in Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` methods (`show`, `edit`, `update`, `destroy`) due to missing ownership verification.
**Learning:** Laravel's implicit route model binding automatically fetches the record, but it does not check if the current user owns it. Shared controllers like `TypeController` are exceptions, but user-specific models like `Project` require explicit ownership checks.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on user-specific resources bound via route models, and use loose inequality to avoid type mismatch issues.
