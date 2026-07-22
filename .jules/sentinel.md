## 2024-07-22 - Missing Authorization on Project Routes
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project routes (`show`, `edit`, `update`, `destroy`) due to implicit route model binding without validation of user ownership.
**Learning:** Laravel's route model binding retrieves the record but does not check user permissions unless a Policy is explicitly applied or manual checks are added. Since no `ProjectPolicy` was used, manual checks were required.
**Prevention:** Always verify that the currently authenticated user is authorized to perform actions on the specific model instance retrieved via route model binding. Use Policies or explicit checks like `if ($model->user_id !== auth()->id()) abort(403);`.
