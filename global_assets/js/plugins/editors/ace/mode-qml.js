define("ace/mode/qml_highlight_rules", ["require", "exports", "module", "ace/lib/oop", "ace/mode/text_highlight_rules"], function (e, t, n) {
    "use strict";
    var r = e("../lib/oop"), i = e("./text_highlight_rules").TextHighlightRules, s = function () {
        var e = this.createKeywordMapper({
            "variable.language": "Array|Boolean|Date|Function|Iterator|Number|Object|RegExp|String|Proxy|Namespace|QName|XML|XMLList|ArrayBuffer|Float32Array|Float64Array|Int16Array|Int32Array|Int8Array|Uint16Array|Uint32Array|Uint8Array|Uint8ClampedArray|Error|EvalError|InternalError|RangeError|ReferenceError|StopIteration|SyntaxError|TypeError|URIError|decodeURI|decodeURIComponent|encodeURI|encodeURIComponent|eval|isFinite|isNaN|parseFloat|parseInt|JSON|Math|this|arguments|prototype|window|document",
            keyword: "const|yield|import|get|set|async|await|break|case|catch|continue|default|delete|do|else|finally|for|function|if|in|of|instanceof|new|return|switch|throw|try|typeof|let|var|while|with|debugger|__parent__|__count__|escape|unescape|with|__proto__|class|enum|extends|super|export|implements|private|public|interface|package|protected|static|readonly|string|int|bool|date|color|url|real|double|var|variant|height|width|anchors|parent|Abstract3DSeries|AbstractActionInput|AbstractAnimation|AbstractAxis|AbstractAxis3D|AbstractAxisInput|AbstractBarSeries|AbstractButton|AbstractClipAnimator|AbstractClipBlendNode|AbstractDataProxy|AbstractGraph3D|AbstractInputHandler3D|AbstractPhysicalDevice|AbstractRayCaster|AbstractSeries|AbstractSkeleton|AbstractTextureImage|Accelerometer|AccelerometerReading|Accessible|Action|ActionGroup|ActionInput|AdditiveClipBlend|Address|Affector|Age|AlphaCoverage|AlphaTest|Altimeter|AltimeterReading|AmbientLightReading|AmbientLightSensor|AmbientTemperatureReading|AmbientTemperatureSensor|AnalogAxisInput|AnchorAnimation|AnchorChanges|AngleDirection|AnimatedImage|AnimatedSprite|Animation|AnimationController|AnimationGroup|Animator|ApplicationWindow|ApplicationWindowStyle|AreaSeries|Armature|AttenuationModelInverse|AttenuationModelLinear|Attractor|Attribute|Audio|AudioCategory|AudioEngine|AudioListener|AudioSample|AuthenticationDialogRequest|Axis|AxisAccumulator|AxisSetting|BackspaceKey|Bar3DSeries|BarCategoryAxis|BarDataProxy|BarSeries|BarSet|Bars3D|BaseKey|Behavior|Binding|Blend|BlendEquation|BlendEquationArguments|BlendedClipAnimator|BlitFramebuffer|BluetoothDiscoveryModel|BluetoothService|BluetoothSocket|BorderImage|BorderImageMesh|BoxPlotSeries|BoxSet|BrightnessContrast|Buffer|BusyIndicator|BusyIndicatorStyle|Button|ButtonAxisInput|ButtonGroup|ButtonStyle|Calendar|CalendarStyle|Camera|Camera3D|CameraCapabilities|CameraCapture|CameraExposure|CameraFlash|CameraFocus|CameraImageProcessing|CameraLens|CameraRecorder|CameraSelector|CandlestickSeries|CandlestickSet|Canvas|Canvas3D|Canvas3DAbstractObject|Canvas3DActiveInfo|Canvas3DBuffer|Canvas3DContextAttributes|Canvas3DFrameBuffer|Canvas3DProgram|Canvas3DRenderBuffer|Canvas3DShader|Canvas3DShaderPrecisionFormat|Canvas3DTexture|Canvas3DTextureProvider|Canvas3DUniformLocation|CanvasGradient|CanvasImageData|CanvasPixelArray|Category|CategoryAxis|CategoryAxis3D|CategoryModel|CategoryRange|ChangeLanguageKey|ChartView|CheckBox|CheckBoxStyle|CheckDelegate|CircularGauge|CircularGaugeStyle|ClearBuffers|ClipAnimator|ClipPlane|CloseEvent|ColorAnimation|ColorDialog|ColorDialogRequest|ColorGradient|ColorGradientStop|ColorMask|ColorOverlay|Colorize|Column|ColumnLayout|ComboBox|ComboBoxStyle|Compass|CompassReading|Component|Component3D|ComputeCommand|ConeGeometry|ConeMesh|ConicalGradient|Connections|ContactDetail|ContactDetails|Container|Context2D|Context3D|ContextMenuRequest|Control|CoordinateAnimation|CuboidGeometry|CuboidMesh|CullFace|CumulativeDirection|Custom3DItem|Custom3DLabel|Custom3DVolume|CustomParticle|CylinderGeometry|CylinderMesh|Date|DateTimeAxis|DelayButton|DelayButtonStyle|DelegateChoice|DelegateChooser|DelegateModel|DelegateModelGroup|DepthTest|Desaturate|Dial|DialStyle|Dialog|DialogButtonBox|DiffuseMapMaterial|DiffuseSpecularMapMaterial|DiffuseSpecularMaterial|Direction|DirectionalBlur|DirectionalLight|DispatchCompute|Displace|DistanceReading|DistanceSensor|Dithering|DoubleValidator|Drag|DragEvent|DragHandler|Drawer|DropArea|DropShadow|DwmFeatures|DynamicParameter|EditorialModel|Effect|EllipseShape|Emitter|EnterKey|EnterKeyAction|Entity|EntityLoader|EnvironmentLight|EventConnection|EventPoint|EventTouchPoint|ExclusiveGroup|ExtendedAttributes|ExtrudedTextGeometry|ExtrudedTextMesh|FastBlur|FileDialog|FileDialogRequest|FillerKey|FilterKey|FinalState|FirstPersonCameraController|Flickable|Flipable|Flow|FocusScope|FolderListModel|FontDialog|FontLoader|FontMetrics|FormValidationMessageRequest|ForwardRenderer|Frame|FrameAction|FrameGraphNode|Friction|FrontFace|FrustumCulling|FullScreenRequest|GLStateDumpExt|GammaAdjust|Gauge|GaugeStyle|GaussianBlur|GeocodeModel|Geometry|GeometryRenderer|GestureEvent|Glow|GoochMaterial|Gradient|GradientStop|GraphicsApiFilter|GraphicsInfo|Gravity|Grid|GridLayout|GridMesh|GridView|GroupBox|GroupGoal|Gyroscope|GyroscopeReading|HBarModelMapper|HBoxPlotModelMapper|HCandlestickModelMapper|HPieModelMapper|HXYModelMapper|HandlerPoint|HandwritingInputPanel|HandwritingModeKey|HeightMapSurfaceDataProxy|HideKeyboardKey|HistoryState|HolsterReading|HolsterSensor|HorizontalBarSeries||HorizontalPercentBarSeries|HorizontalStackedBarSeries|HoverHandler|HueSaturation|HumidityReading|HumiditySensor|IRProximityReading|IRProximitySensor|Icon|Image|ImageModel|ImageParticle|InnerShadow|InputChord|InputContext|InputEngine|InputHandler3D|InputMethod|InputModeKey|InputPanel|InputSequence|InputSettings|Instantiator|IntValidator|InvokedServices|Item|ItemDelegate|ItemGrabResult|ItemModelBarDataProxy|ItemModelScatterDataProxy|ItemModelSurfaceDataProxy|ItemParticle|ItemSelectionModel|IviApplication|IviSurface|JavaScriptDialogRequest|Joint|JumpList|JumpListCategory|JumpListDestination|JumpListLink|JumpListSeparator|Key|KeyEvent|KeyIcon|KeyNavigation|KeyPanel|KeyboardColumn|KeyboardDevice|KeyboardHandler|KeyboardLayout|KeyboardLayoutLoader|KeyboardRow|KeyboardStyle|KeyframeAnimation|Keys|Label|Layer|LayerFilter|Layout|LayoutMirroring|Legend|LerpBlend|LevelAdjust|LevelOfDetail|LevelOfDetailBoundingSphere|LevelOfDetailLoader|LevelOfDetailSwitch|LidReading|LidSensor|Light|Light3D|LightReading|LightSensor|LineSeries|LineShape|LineWidth|LinearGradient|ListElement|ListModel|ListView|Loader|Locale|Location|LogValueAxis|LogValueAxis3DFormatter|LoggingCategory|LogicalDevice|Magnetometer|MagnetometerReading|Map|MapCircle|MapCircleObject|MapCopyrightNotice|MapGestureArea|MapIconObject|MapItemGroup|MapItemView|MapObjectView|MapParameter|MapPinchEvent|MapPolygon|MapPolygonObject|MapPolyline|MapPolylineObject|MapQuickItem|MapRectangle|MapRoute|MapRouteObject|MapType|Margins|MaskShape|MaskedBlur|Material|Matrix4x4|MediaPlayer|MemoryBarrier|Menu|MenuBar|MenuBarItem|MenuBarStyle|MenuItem|MenuSeparator|MenuStyle|Mesh|MessageDialog|ModeKey|MorphTarget|MorphingAnimation|MouseArea|MouseDevice|MouseEvent|MouseHandler|MultiPointHandler|MultiPointTouchArea|MultiSampleAntiAliasing|Navigator|NdefFilter|NdefMimeRecord|NdefRecord|NdefTextRecord|NdefUriRecord|NearField|NoDepthMask|NoDraw|Node|NodeInstantiator|NormalDiffuseMapAlphaMaterial|NormalDiffuseMapMaterial|NormalDiffuseSpecularMapMaterial|Number|NumberAnimation|NumberKey|Object3D|ObjectModel|ObjectPicker|OpacityAnimator|OpacityMask|OpenGLInfo|OrbitCameraController|OrientationReading|OrientationSensor|Overlay|Package|Page|PageIndicator|Pane|ParallelAnimation|Parameter|ParentAnimation|ParentChange|Particle|ParticleGroup|ParticlePainter|ParticleSystem|Path|PathAngleArc|PathAnimation|PathArc|PathAttribute|PathCubic|PathCurve|PathElement|PathInterpolator|PathLine|PathMove|PathPercent|PathQuad|PathSvg|PathView|PauseAnimation|PerVertexColorMaterial|PercentBarSeries|PhongAlphaMaterial|PhongMaterial|PickEvent|PickLineEvent|PickPointEvent|PickTriangleEvent|PickingSettings|Picture|PieMenu|PieMenuStyle|PieSeries|PieSlice|PinchArea|PinchEvent|PinchHandler|Place|PlaceAttribute|PlaceSearchModel|PlaceSearchSuggestionModel|PlaneGeometry|PlaneMesh|PlayVariation|Playlist|PlaylistItem|Plugin|PluginParameter|PointDirection|PointHandler|PointLight|PointSize|PointerDevice|PointerDeviceHandler|PointerEvent|PointerHandler|PolarChartView|PolygonOffset|Popup|Position|PositionSource|Positioner|PressureReading|PressureSensor|Product|ProgressBar|ProgressBarStyle|PropertyAction|PropertyAnimation|PropertyChanges|ProximityFilter|ProximityReading|ProximitySensor|QAbstractState|QAbstractTransition|QSignalTransition|QVirtualKeyboardSelectionListModel|Qt|QtMultimedia|QtObject|QtPositioning|QuaternionAnimation|QuotaRequest|RadialBlur|RadialGradient|Radio|RadioButton|RadioButtonStyle|RadioData|RadioDelegate|RangeSlider|Ratings|RayCaster|Rectangle|RectangleShape|RectangularGlow|RecursiveBlur|RegExpValidator|RegisterProtocolHandlerRequest|RenderCapture|RenderCaptureReply|RenderPass|RenderPassFilter|RenderSettings|RenderState|RenderStateSet|RenderSurfaceSelector|RenderTarget|RenderTargetOutput|RenderTargetSelector|Repeater|ReviewModel|Rotation|RotationAnimation|RotationAnimator|RotationReading|RotationSensor|RoundButton|Route|RouteLeg|RouteManeuver|RouteModel|RouteQuery|RouteSegment|Row|RowLayout|Scale|ScaleAnimator|Scatter3D|Scatter3DSeries|ScatterDataProxy|ScatterSeries|Scene2D|Scene3D|SceneLoader|ScissorTest|Screen|ScreenRayCaster|ScriptAction|ScrollBar|ScrollIndicator|ScrollView|ScrollViewStyle|ScxmlStateMachine|SeamlessCubemap|SelectionListItem|Sensor|SensorGesture|SensorGlobal|SensorReading|SequentialAnimation|Settings|SettingsStore|ShaderEffect|ShaderEffectSource|ShaderProgram|ShaderProgramBuilder|Shape|ShellSurface|ShellSurfaceItem|ShiftHandler|ShiftKey|Shortcut|SignalSpy|SignalTransition|SinglePointHandler|Skeleton|SkeletonLoader|Slider|SliderStyle|SmoothedAnimation|SortPolicy|Sound|SoundEffect|SoundInstance|SpaceKey|SphereGeometry|SphereMesh|SpinBox|SpinBoxStyle|SplineSeries|SplitView|SpotLight|SpringAnimation|Sprite|SpriteGoal|SpriteSequence|Stack|StackLayout|StackView|StackViewDelegate|StackedBarSeries|State|StateChangeScript|StateGroup|StateMachine|StateMachineLoader|StatusBar|StatusBarStyle|StatusIndicator|StatusIndicatorStyle|StencilMask|StencilOperation|StencilOperationArguments|StencilTest|StencilTestArguments|Store|String|Supplier|Surface3D|Surface3DSeries|SurfaceDataProxy|SwipeDelegate|SwipeView|Switch|SwitchDelegate|SwitchStyle|SymbolModeKey|SystemPalette|Tab|TabBar|TabButton|TabView|TabViewStyle|TableView|TableViewColumn|TableViewStyle|TapHandler|TapReading|TapSensor|TargetDirection|TaskbarButton|Technique|TechniqueFilter|TestCase|Text|TextArea|TextAreaStyle|TextEdit|TextField|TextFieldStyle|TextInput|TextMetrics|TextureImage|TextureImageFactory|Theme3D|ThemeColor|ThresholdMask|ThumbnailToolBar|ThumbnailToolButton|TiltReading|TiltSensor|TimeoutTransition|Timer|ToggleButton|ToggleButtonStyle|ToolBar|ToolBarStyle|ToolButton|ToolSeparator|ToolTip|Torch|TorusGeometry|TorusMesh|TouchEventSequence|TouchInputHandler3D|TouchPoint|Trace|TraceCanvas|TraceInputArea|TraceInputKey|TraceInputKeyPanel|TrailEmitter|Transaction|Transform|Transition|Translate|TreeView|TreeViewStyle|Tumbler|TumblerColumn|TumblerStyle|Turbulence|UniformAnimator|User|VBarModelMapper|VBoxPlotModelMapper|VCandlestickModelMapper|VPieModelMapper|VXYModelMapper|ValueAxis|ValueAxis3D|ValueAxis3DFormatter|Vector3dAnimation|VertexBlendAnimation|Video|VideoOutput|ViewTransition|Viewport|VirtualKeyboardSettings|Wander|WavefrontMesh|WaylandClient|WaylandCompositor|WaylandHardwareLayer|WaylandOutput|WaylandQuickItem|WaylandSeat|WaylandSurface|WaylandView|Waypoint|WebChannel|WebEngine|WebEngineAction|WebEngineCertificateError|WebEngineDownloadItem|WebEngineHistory|WebEngineHistoryListModel|WebEngineLoadRequest|WebEngineNavigationRequest|WebEngineNewViewRequest|WebEngineProfile|WebEngineScript|WebEngineSettings|WebEngineView|WebSocket|WebSocketServer|WebView|WebViewLoadRequest|WheelEvent|Window|WlShell|WlShellSurface|WorkerScript|XAnimator|XYPoint|XYSeries|XdgDecorationManagerV1|XdgPopup|XdgPopupV5|XdgPopupV6|XdgShell|XdgShellV5|XdgShellV6|XdgSurface|XdgSurfaceV5|XdgSurfaceV6|XdgToplevel|XdgToplevelV6|XmlListModel|XmlRole|YAnimator|ZoomBlur",
            "storage.type": "const|let|var|function|property|",
            "constant.language": "null|Infinity|NaN|undefined",
            "support.function": "print|console\\.log",
            "constant.language.boolean": "true|false"
        }, "identifier");
        this.$rules = {
            start: [{token: "string", regex: '"', next: "string"}, {
                token: "constant.numeric",
                regex: "0[xX][0-9a-fA-F]+\\b"
            }, {
                token: "constant.numeric",
                regex: "[+-]?\\d+(?:(?:\\.\\d*)?(?:[eE][+-]?\\d+)?)?\\b"
            }, {token: "constant.language.boolean", regex: "(?:true|false)\\b"}, {
                token: "text",
                regex: "['](?:(?:\\\\.)|(?:[^'\\\\]))*?[']"
            }, {token: "comment", regex: "\\/\\/.*$"}, {
                token: "comment.start",
                regex: "\\/\\*",
                next: "comment"
            }, {token: "paren.lparen", regex: "[[({]"}, {token: "paren.rparen", regex: "[\\])}]"}, {
                token: "text",
                regex: "\\s+"
            }, {token: e, regex: "\\b\\w+\\b"}],
            string: [{
                token: "constant.language.escape",
                regex: /\\(?:x[0-9a-fA-F]{2}|u[0-9a-fA-F]{4}|["\\\/bfnrt])/
            }, {token: "string", regex: '"|$', next: "start"}, {defaultToken: "string"}],
            comment: [{token: "comment.end", regex: "\\*\\/", next: "start"}, {defaultToken: "comment"}]
        }
    };
    r.inherits(s, i), t.QmlHighlightRules = s
}), define("ace/mode/folding/cstyle", ["require", "exports", "module", "ace/lib/oop", "ace/range", "ace/mode/folding/fold_mode"], function (e, t, n) {
    "use strict";
    var r = e("../../lib/oop"), i = e("../../range").Range, s = e("./fold_mode").FoldMode,
        o = t.FoldMode = function (e) {
            e && (this.foldingStartMarker = new RegExp(this.foldingStartMarker.source.replace(/\|[^|]*?$/, "|" + e.start)), this.foldingStopMarker = new RegExp(this.foldingStopMarker.source.replace(/\|[^|]*?$/, "|" + e.end)))
        };
    r.inherits(o, s), function () {
        this.foldingStartMarker = /([\{\[\(])[^\}\]\)]*$|^\s*(\/\*)/, this.foldingStopMarker = /^[^\[\{\(]*([\}\]\)])|^[\s\*]*(\*\/)/, this.singleLineBlockCommentRe = /^\s*(\/\*).*\*\/\s*$/, this.tripleStarBlockCommentRe = /^\s*(\/\*\*\*).*\*\/\s*$/, this.startRegionRe = /^\s*(\/\*|\/\/)#?region\b/, this._getFoldWidgetBase = this.getFoldWidget, this.getFoldWidget = function (e, t, n) {
            var r = e.getLine(n);
            if (this.singleLineBlockCommentRe.test(r) && !this.startRegionRe.test(r) && !this.tripleStarBlockCommentRe.test(r)) return "";
            var i = this._getFoldWidgetBase(e, t, n);
            return !i && this.startRegionRe.test(r) ? "start" : i
        }, this.getFoldWidgetRange = function (e, t, n, r) {
            var i = e.getLine(n);
            if (this.startRegionRe.test(i)) return this.getCommentRegionBlock(e, i, n);
            var s = i.match(this.foldingStartMarker);
            if (s) {
                var o = s.index;
                if (s[1]) return this.openingBracketBlock(e, s[1], n, o);
                var u = e.getCommentFoldRange(n, o + s[0].length, 1);
                return u && !u.isMultiLine() && (r ? u = this.getSectionRange(e, n) : t != "all" && (u = null)), u
            }
            if (t === "markbegin") return;
            var s = i.match(this.foldingStopMarker);
            if (s) {
                var o = s.index + s[0].length;
                return s[1] ? this.closingBracketBlock(e, s[1], n, o) : e.getCommentFoldRange(n, o, -1)
            }
        }, this.getSectionRange = function (e, t) {
            var n = e.getLine(t), r = n.search(/\S/), s = t, o = n.length;
            t += 1;
            var u = t, a = e.getLength();
            while (++t < a) {
                n = e.getLine(t);
                var f = n.search(/\S/);
                if (f === -1) continue;
                if (r > f) break;
                var l = this.getFoldWidgetRange(e, "all", t);
                if (l) {
                    if (l.start.row <= s) break;
                    if (l.isMultiLine()) t = l.end.row; else if (r == f) break
                }
                u = t
            }
            return new i(s, o, u, e.getLine(u).length)
        }, this.getCommentRegionBlock = function (e, t, n) {
            var r = t.search(/\s*$/), s = e.getLength(), o = n, u = /^\s*(?:\/\*|\/\/|--)#?(end)?region\b/, a = 1;
            while (++n < s) {
                t = e.getLine(n);
                var f = u.exec(t);
                if (!f) continue;
                f[1] ? a-- : a++;
                if (!a) break
            }
            var l = n;
            if (l > o) return new i(o, r, l, t.length)
        }
    }.call(o.prototype)
}), define("ace/mode/qml", ["require", "exports", "module", "ace/lib/oop", "ace/mode/text", "ace/mode/qml_highlight_rules", "ace/mode/folding/cstyle"], function (e, t, n) {
    "use strict";
    var r = e("../lib/oop"), i = e("./text").Mode, s = e("./qml_highlight_rules").QmlHighlightRules,
        o = e("./folding/cstyle").FoldMode, u = function () {
            this.HighlightRules = s, this.foldingRules = new o, this.$behaviour = this.$defaultBehaviour
        };
    r.inherits(u, i), function () {
        this.lineCommentStart = "//", this.blockComment = {start: "/*", end: "*/"}, this.$quotes = {
            '"': '"',
            "'": "'"
        }, this.$id = "ace/mode/qml"
    }.call(u.prototype), t.Mode = u
});
(function () {
    window.require(["ace/mode/qml"], function (m) {
        if (typeof module == "object" && typeof exports == "object" && module) {
            module.exports = m;
        }
    });
})();
            