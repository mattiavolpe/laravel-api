## 2024-05-17 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed any authenticated user to view, edit, update, or delete any project by modifying the project ID in the URL.
**Learning:** Implicit route model binding in Laravel fetches the model instance, but doesn't automatically check if the currently authenticated user owns that instance.
**Prevention:** Always manually verify ownership (e.g., `$model->user_id === auth()->id()`) or use Laravel Policies when authorizing actions on user-specific resources in controllers.
